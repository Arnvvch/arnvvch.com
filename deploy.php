<?php
// Shared secret (set the same in GitHub webhook settings)
$secret = "obamahamburgirs";

// Get payload
$payload = file_get_contents("php://input");
$headers = getallheaders();

// Verify signature
if (!isset($headers['X-Hub-Signature-256'])) {
    http_response_code(403);
    exit("No signature");
}

$signature = "sha256=" . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($signature, $headers['X-Hub-Signature-256'])) {
    http_response_code(403);
    exit("Invalid signature");
}

// Run deploy script
$output = shell_exec("/home/Arnvvch/web/arnvvch.com/deploy.sh 2>&1");
echo "<pre>$output</pre>";
?>
