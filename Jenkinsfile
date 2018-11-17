pipeline {
    agent any

    stages {
        stage('Building images') {
            steps {
                sh 'docker -v'
            }
        }
        stage('Testing images') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Cleaning images') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}