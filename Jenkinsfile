pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
               echo "building..."
               echo "nothing .." > https://github.com/ShemaAxel/test/blob/master/tryAppend.txt
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
