<?php

include '_includes.php';

$admin = new Member();
$admin->username = "Mihai";
$workspace = $admin->createWorkspace("www.linkedin.com");

$member = new Member();
$member->username = "Mirela";


$chat = $admin->createChat("title chat", $workspace);
$chat_member = $member->createChat("titsle chat", $workspace);
$workspace->setAdmin($admin);
$admin->addWorkspaceMember($member, $workspace);

$member->postMessageToChat("test", $chat);
