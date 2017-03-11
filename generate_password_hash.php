<?php echo crypt(getenv('ANSIBLE_USER_PASSWORD'), '$6$' . substr(base_convert(md5(uniqid()), 16, 36), 0, 12) . '$') . PHP_EOL;
