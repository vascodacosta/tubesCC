pipeline {
    agent any
    environment {
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'
        DOCKER_PROJECT_NAME = 'tubesCC'
        DOCKER_IMAGE = 'kostubes'
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
                script {
                    // Membuat Docker image dengan nama yang didefinisikan di variabel DOCKER_IMAGE
                    docker.build("${DOCKER_IMAGE}", ".")
                }
            }
        }
    }

    post {
        success {
            echo "Pipeline executed successfully!"
        }
        failure {
            echo "Pipeline failed. Please check the logs."
        }
    }
}
