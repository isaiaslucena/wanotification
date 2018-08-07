#!/bin/bash -x

datenow=$(date +"%Y-%m-%d %H:%M:%S")

curl -s -o /dev/null -X POST 'http://192.168.0.13:5000/send' -H 'content-type: application/json' -d "{\"idGrupo\": 8, \"msgAssunto\": \"Verificação\", \"msgTitulo\": \"Verificação automática do sistema\", \"msgLink\": \"Enviado: ${datenow} \"}"
