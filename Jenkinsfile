pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Deploy to XAMPP') {
            steps {
                bat '''
                rmdir /S /Q C:\\xampp\\htdocs\\KSI2025
                xcopy /E /I /Y . C:\\xampp\\htdocs\\KSI2025
                '''
            }
        }
    }
}
