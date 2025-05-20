student_name = "Jefferson Tan"
grades = [89, 78, 94, 85, 91]
subjects = ["Math", "English", "Science", "History", "PE"]

print("=== Report Card ===")
print("Student Name:", student_name)

for i in range(len(subjects)):
    print(f"{subjects[i]}: {grades[i]}")

average = sum(grades) / len(grades)
print("Average Grade:", average)

if average >= 75:
    print("Status: PASSED")
else:
    print("Status: FAILED")
