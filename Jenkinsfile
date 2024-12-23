pipeline {
    agent any

    environment {
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'
        DOCKER_PROJECT_NAME = 'tubesCC'
        DOCKER_IMAGE = 'kostubes-app'
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

        stage('Build Docker Image') {
            steps {
                echo "Building Docker image..."
                script {
                    try {
                        def appImage = docker.build("${DOCKER_IMAGE}", ".")
                        echo "Docker image '${DOCKER_IMAGE}' built successfully!"
                    } catch (Exception e) {
                        error "Failed to build Docker image: ${e.message}"
                    }
                }
            }
        }

        stage('Start Docker Containers') {
            steps {
                echo "Starting Docker containers..."
                script {
                    try {
                        sh '''
                        # Stop and remove existing containers if any
                        docker-compose -f ${DOCKER_COMPOSE_FILE} -p ${DOCKER_PROJECT_NAME} down || true

                        # Build and start containers
                        docker-compose -f ${DOCKER_COMPOSE_FILE} -p ${DOCKER_PROJECT_NAME} up -d --build
                        '''
                        echo "Docker containers started successfully!"
                    } catch (Exception e) {
                        error "Failed to start Docker containers: ${e.message}"
                    }
                }
            }
        }

        stage('Check Container Status') {
            steps {
                echo "Checking Docker container status..."
                script {
                    try {
                        sh '''
                        docker-compose -f ${DOCKER_COMPOSE_FILE} -p ${DOCKER_PROJECT_NAME} ps
                        '''
                        echo "Docker container status checked successfully!"
                    } catch (Exception e) {
                        error "Failed to check Docker container status: ${e.message}"
                    }
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
