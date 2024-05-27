pipeline {
  agent any
  stages {
    stage('verify version') {
      steps {
        sh 'php --version'
      }
    }
    stage('jovenes') {
      steps {
        sh 'php index.php'
      }
    }
  }
}
