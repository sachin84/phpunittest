node {

stage 'Checkout'
git credentialsId: '1657165c-b3ea-46d5-9453-44672d5ba204', url: 'https://github.com/sachin84/phpunittest.git'
// Test stage
stage 'Test'
// Run the tests
sh "ant"
}