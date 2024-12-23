pipeline {
    agent any

    environment {
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'
        DOCKER_PROJECT_NAME = 'tubesCC'
        GIT_REPO = 'https://github.com/vascodacosta/tubesCC.git'
        GIT_BRANCH = 'main'
    }

    stages {
        stage('Clone Repository') {
            steps {
                echo "Cloning repository..."
                git branch: "${GIT_BRANCH}", url: "${GIT_REPO}"
            }
        }

        // stage('Build and Start Docker Containers') {
        //     steps {
        //         echo "Building and starting Docker containers..."
        //         script {
        //             sh '''
        //             # Stop and remove existing containers if any
        //             docker-compose -p ${DOCKER_PROJECT_NAME} down || true

        //             # Build and start containers
        //             docker-compose -p ${DOCKER_PROJECT_NAME} up -d --build
        //             '''
        //         }
        //     }
        // }

        stage('Check Container Status') {
            steps {
                echo "Checking container status..."
                script {
                    sh '''
                    docker-compose -p ${DOCKER_PROJECT_NAME} ps
                    '''
                }
            }
        }
    }

    post {
        success {
            echo "Pipeline executed successfully! Docker containers are up and running."
        }
        failure {
            echo "Pipeline failed. Please check the logs."
        }
    }
}
