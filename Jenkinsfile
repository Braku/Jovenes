pipeline {
  agent any
  stages {
    stage('verify version') {
      steps {
        sh 'php --version'
      }
    }
    stage('TMC') {
      steps {
        sh 'php index.php'
      }
    }
  }
}
