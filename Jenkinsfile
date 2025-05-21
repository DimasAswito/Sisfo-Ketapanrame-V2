pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'laravel-app'
    }

    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/DimasAswito/Sisfo-Ketapanrame-V2.git'
            }
        }

        stage('Clean up existing containers') {
            steps {
                script {
                    // Stop and remove all running containers
                    sh 'docker ps -aq && docker stop $(docker ps -aq) || true && docker rm $(docker ps -aq) || true'
                }
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $DOCKER_IMAGE .'
            }
        }

        stage('Run Docker Container') {
            steps {
                sh 'docker run -d -p 8000:8000 --name laravel-container $DOCKER_IMAGE'
            }
        }
    }
}