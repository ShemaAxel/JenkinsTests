pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
               echo "building..."
               echo "nothing .." > tryAppend.txt
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
