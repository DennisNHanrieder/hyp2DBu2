# QuizQuest Full-Stack Quiz Application

## Overview  
**QuizQuest Full-Stack Quiz Application** is a fully functional quiz platform. It integrates a relational database backend, role-based access control, and a user-facing quiz-playing experience.

## Why this project exists  
This project was developed to:  
- Showcase **full-stack development** skills from schema design to UI/UX implementation.  
- Implement **business logic** for quiz creation, management, and gameplay.  
- Demonstrate role-based features for both quiz administrators and participants.  

## Features  
- **Role-Based Access** — Different options for admins (create, edit, delete quizzes) vs. players (start quizzes).  
- **Quiz Management** — Create, edit, delete quizzes directly from the UI.  
- **Play Quizzes** — Start a quiz, answer questions, and receive scoring feedback.  
- **Question Navigation** — Move between quiz questions in sequence.  
- **Result Display** — View score and completion status at the end of the quiz.  
- **Responsive UI** — Optimized for various screen sizes.

## Technologies used  
- **Backend:** Relational database (MySQL/MariaDB), server-side logic (PHP or similar from base assignment).  
- **Frontend:** HTML, CSS, JavaScript (or relevant framework from Assignment 4).  
- **Tools:** SQL client, development server (PHP built-in or similar).  

## How to run the project  
```bash
# 1) Clone the repository
git clone <https://github.com/DennisNHanrieder/hyp2DBu2.git>
cd hyp2DBu2-main/hyp2DBu2-main
# 2) Start the application server
php -S localhost:8000
```

## Dependencies & requirements  
- MySQL 8+ or MariaDB 10.5+  
- PHP 8+ (or the backend runtime from the base assignment)  
- Modern web browser  

## How to contribute  
1. Fork the repository and create a feature branch.  
2. Ensure changes maintain both front-end and back-end integrity.  
3. Document new features, especially those impacting business logic.  
4. Submit a pull request with a description of the improvements.

## What powers the core functionality?  
- **Relational database** — Stores quiz, question, and answer data.  
- **Business logic layer** — Handles game rules, scoring, and permissions.  
- **Dynamic UI** — Guides users through the quiz-playing process.  
