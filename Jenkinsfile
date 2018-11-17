pipeline {
    agent any

    stages {
        stage('Building images') {
            steps {
                sh 'docker build -t registry.vladino.me:5000/vladinome:local -f docker/Dockerfile-local .'
            }
        }
        stage('Testing images') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Pushing images') {
            steps {
                sh 'docker push registry.vladino.me:5000/vladinome'
            }
        }
        stage('Cleaning images') {
            steps {
                echo 'Cleaning build image...'
            }
        }
    }
}