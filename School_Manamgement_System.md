# **School Management System Roadmap**

## **1. Project Planning and Scope**
### **1.1. Goals**
- Develop a system to automate and simplify the management of school operations.
- Provide secure, role-based access for administrators, teachers, students, and parents.
- Centralize student, teacher, class, and academic data for easy retrieval and analysis.

### **1.2. Key Features**
- **User Roles**: Administrator, Teacher, Student, Parent.
- **Core Modules**:
  1. Authentication & Authorization.
  2. Student & Teacher Management.
  3. Attendance Tracking.
  4. Grading System.
  5. Timetable Management.
  6. Reporting and Analytics.

---

## **2. Technology Stack**
- **Front-End**: HTML, CSS, JavaScript
- **Back-End**: PHP
- **Database**: MySQL.
- **Server**: Apache (via XAMPP for local development).

---

## **3. Database Design**
### **3.1. Database Schema**
- **Database Name**: `school_management_system`
- Tables:
  1. **`users`**: Stores login credentials and role information.
     - Fields: `id`, `username`, `password`, `role`, `created_at`.
  2. **`students`**: Stores student details.
     - Fields: `id`, `user_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `class_id`, `created_at`.
  3. **`teachers`**: Stores teacher details.
     - Fields: `id`, `user_id`, `first_name`, `last_name`, `subject_id`, `created_at`.
  4. **`classes`**: Stores class information.
     - Fields: `id`, `name`, `grade_level`, `teacher_id`, `created_at`.
  5. **`subjects`**: Stores subject details.
     - Fields: `id`, `name`, `description`, `created_at`.
  6. **`attendance`**: Tracks student attendance.
     - Fields: `id`, `student_id`, `date`, `status`, `created_at`.
  7. **`grades`**: Stores grades for students.
     - Fields: `id`, `student_id`, `subject_id`, `grade`, `remarks`, `created_at`.
  8. **`timetable`**: Stores class schedules.
     - Fields: `id`, `class_id`, `subject_id`, `day`, `start_time`, `end_time`, `created_at`.

---

## **4. System Architecture**
### **4.1. MVC File Structure**
/school_management_system 
/config database.php 
/models User.php Student.php Teacher.php Subject.php Class.php Attendance.php Grade.php Timetable.php 
/controllers AuthController.php StudentController.php TeacherController.php SubjectController.php AttendanceController.php GradeController.php TimetableController.php 
/views 
/layouts header.php footer.php 
/auth login.php register.php 
/dashboard admin_dashboard.php teacher_dashboard.php student_dashboard.php 
/students list.php create.php edit.php view.php 
/teachers list.php create.php edit.php view.php 
/subjects list.php create.php edit.php 
/classes list.php create.php edit.php 
/attendance mark.php view.php 
/grades add.php view.php 
/timetable create.php view.php 
/public index.php assets/ css/ js/ images/

---

## **5. Development Process**

### **Phase 1: Authentication System**
- **Goal**: Secure login and registration system with role-based access.
- **Files**:
  - `/models/User.php`: Handles user-related database interactions.
  - `/controllers/AuthController.php`: Manages login and registration logic.
  - `/views/auth/login.php`: Login form.
  - `/views/auth/register.php`: Registration form.
- **Implementation**:
  1. **Database Setup**: Table `users` with encrypted passwords.
  2. **PHP Code**: Use `password_hash` and `password_verify` for secure password management.
  3. **Session Management**: Implement session handling for authenticated users.

---

### **Phase 2: Student and Teacher Management**
- **Goal**: Admin can manage student and teacher records.
- **Files**:
  - `/models/Student.php` and `/models/Teacher.php`.
  - `/controllers/StudentController.php` and `/controllers/TeacherController.php`.
  - `/views/students` and `/views/teachers` (CRUD operations).
- **CRUD Operations**:
  - **Create**: Forms to add new students/teachers.
  - **Read**: List and view details of students/teachers.
  - **Update**: Edit existing records.
  - **Delete**: Remove records with confirmation.

---

### **Phase 3: Attendance Management**
- **Goal**: Track student attendance.
- **Files**:
  - `/models/Attendance.php`.
  - `/controllers/AttendanceController.php`.
  - `/views/attendance/mark.php` and `/views/attendance/view.php`.
- **Features**:
  1. Teachers mark attendance for their classes.
  2. Admins can generate attendance reports.

---

### **Phase 4: Grading System**
- **Goal**: Record and display grades for students.
- **Files**:
  - `/models/Grade.php`.
  - `/controllers/GradeController.php`.
  - `/views/grades/add.php` and `/views/grades/view.php`.
- **Features**:
  - Teachers input grades per subject.
  - Admins and students can view grade reports.

---

### **Phase 5: Timetable Management**
- **Goal**: Create and view class schedules.
- **Files**:
  - `/models/Timetable.php`.
  - `/controllers/TimetableController.php`.
  - `/views/timetable/create.php` and `/views/timetable/view.php`.
- **Features**:
  - Admin schedules classes for specific days and times.
  - Teachers and students can view their schedules.

---

### **Phase 6: Reporting and Analytics**
- **Goal**: Generate reports for attendance, grades, and schedules.
- **Implementation**:
  - Export reports to PDF or Excel using libraries like TCPDF or PHPExcel.
  - Dynamic charts for data visualization (e.g., attendance trends).

---

## **6. Testing and Debugging**
- **Unit Testing**: Test models and controllers.
- **Integration Testing**: Test user flows (e.g., login -> dashboard -> CRUD operations).
- **Cross-Browser Testing**: Ensure compatibility across browsers.

---

## **7. Deployment**
- Deploy on a local server (XAMPP) for demonstration or a live server for real-world usage.
- Set up proper file permissions and security measures (e.g., .htaccess).
- may use AWS after initial determination if functional.

---

## **8. Documentation**
- **User Manual**: Detailed instructions for system use.
- **Technical Documentation**: Includes database schema, API endpoints, and architecture overview.
- **Capstone Report**: Methodology, implementation steps, challenges, and outcomes.
