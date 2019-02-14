<?php
namespace Deployer;

require_once 'recipe/common.php';

host('162.241.253.84')
->port(22)
->stage('production')
->user('primepa6', 'user is {{user}}')
->set('http_user', 'primepa6')
->set('deploy_path', '/home2/primepa6/public_html')
->set('repository', 'https://github.com/imperative-design/primepainters.git');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    // 'deploy:shared',
    // 'deploy:vendors',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');

