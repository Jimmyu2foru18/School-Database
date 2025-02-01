document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const courseList = document.getElementById('courseList');

    registerForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        const formData = new FormData(registerForm);
        const data = Object.fromEntries(formData);

        try {
            const response = await fetch('/api/students/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                alert('Student registered successfully!');
                registerForm.reset();
            } else {
                alert('Registration failed!');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });

    const fetchCourses = async () => {
        try {
            const response = await fetch('/api/courses');
            const courses = await response.json();
            courseList.innerHTML = courses.map(course => `
                <li>
                    <strong>${course.course_name}</strong>
                    <p>${course.description}</p>
                    <p>Credits: ${course.credits}</p>
                </li>
            `).join('');
        } catch (error) {
            console.error('Error fetching courses:', error);
        }
    };

    fetchCourses();
});
