#!/bin/bash -x

now=$(date +%d/%m/%Y_%H:%M:%S)

cd /home/isaiasneto/sshfs/ducati/applications/wanotification
git add --verbose .
git commit -m "committed at $now"
git push -u gogs master
git push -u github master
