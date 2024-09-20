import cv2
import numpy as np

def process_omr(image_path):
    # Load the image
    image = cv2.imread(image_path)
    return image_path

    # Convert to grayscale
    gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

    # Apply a binary threshold to the image
    _, thresh = cv2.threshold(gray, 150, 255, cv2.THRESH_BINARY_INV)

    # Detect contours
    contours, _ = cv2.findContours(thresh, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

    # Sort contours based on their position (top-to-bottom, left-to-right)
    sorted_contours = sorted(contours, key=lambda ctr: cv2.boundingRect(ctr)[1])

    # Set up ranges for columns based on your image
    # These are rough estimates and need to be fine-tuned based on the actual layout
    a_column_range = (40, 100)   # Adjust based on x-coordinate of 'A'
    b_column_range = (120, 180)  # Adjust based on x-coordinate of 'B'
    c_column_range = (200, 260)  # Adjust based on x-coordinate of 'C'
    d_column_range = (280, 340)  # Adjust based on x-coordinate of 'D'

    # Structure to hold answers
    answers = {}
    question_number = 1

    # Group contours by rows to avoid mixing up questions
    row_contours = [[]]

    # Iterate through sorted contours and group them by rows
    prev_y = -1
    for contour in sorted_contours:
        x, y, w, h = cv2.boundingRect(contour)

        # Only consider significant contours
        if w > 20 and h > 20:
            if prev_y == -1 or abs(y - prev_y) > 20:  # Start a new row
                row_contours.append([])
            row_contours[-1].append(contour)
            prev_y = y

    # Process each row
    for row in row_contours:
        if len(row) == 0:
            continue

        # Assume one row corresponds to one question with bubbles for A, B, C, and D
        answer = None
        filled_bubbles = {}

        # Check each contour in the row
        for contour in row:
            x, y, w, h = cv2.boundingRect(contour)

            # Determine which column the contour falls into
            if a_column_range[0] < x < a_column_range[1]:
                bubble = 'A'
            elif b_column_range[0] < x < b_column_range[1]:
                bubble = 'B'
            elif c_column_range[0] < x < c_column_range[1]:
                bubble = 'C'
            elif d_column_range[0] < x < d_column_range[1]:
                bubble = 'D'
            else:
                continue

            # Check if the bubble is filled by contour area (adjust the threshold if necessary)
            if cv2.contourArea(contour) > 400:  # Adjust this threshold if required
                filled_bubbles[bubble] = True

        # Determine the answer based on filled bubbles
        if len(filled_bubbles) == 1:
            # If exactly one bubble is filled, it's the answer
            answer = list(filled_bubbles.keys())[0]
        elif len(filled_bubbles) > 1:
            answer = 'Multiple filled'  # Handle multiple filled bubbles (ambiguous)
        else:
            answer = 'Unanswered'  # No bubbles filled

        # Store the answer in the answers dictionary
        if question_number <= 68:  # Based on your sheet having 68 questions
            answers[question_number] = answer
            question_number += 1

    return image_path

if __name__ == "__main__":
    # Example usage
    image_path = 'asdf.jpg'  # Path to your OMR sheet image
    results = process_omr(image_path)

    # Print the detected answers
    for q_no, answer in results.items():
        print(f"Question {q_no}: {answer}")
