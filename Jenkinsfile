pipeline {
    agent any
    environment {
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'
        DOCKER_PROJECT_NAME = 'tubesCC'
        DOCKER_IMAGE = 'vazcodacosta/kostubes:v1.0'
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
                    docker.build("${DOCKER_IMAGE}", ".")
                }
            }
        }

        // stage('Push Docker Image') {
        //     steps {
        //         echo "Pushing Docker image to Docker Hub..."
        //         script {
        //             sh '''
        //             # Login to Docker Hub (requires credentials configured in Jenkins)
        //             echo $DOCKER_HUB_PASSWORD | docker login -u $DOCKER_HUB_USERNAME --password-stdin

        //             # Push the image
        //             docker push ${DOCKER_IMAGE}
        //             '''
        //         }
        //     }
        // }

    stages {
        stage('Checkout GitHub Repo') {
            steps {
                script {
                    //Add github repo url
                    git main: 'node-test', url: 'https://github.com/vascodacosta/tubesCC.git'
                }
            }
        }
    }

    post {
        always {
            //Add channel name
            slackSend channel: 'channelName',
            message: "Find Status of Pipeline:- ${currentBuild.currentResult} ${env.JOB_NAME} ${env.BUILD_NUMBER} ${BUILD_URL}"
        }
    }
}
    }

    post {
        success {
            echo "Pipeline executed successfully! Image has been pushed to Docker Hub."
        }
        failure {
            echo "Pipeline failed. Please check the logs."
        }
    }
}
