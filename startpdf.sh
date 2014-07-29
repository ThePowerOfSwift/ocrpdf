#/bin/sh

bin/ocrmypdf $1 $2 $3 $4 $5 $6 $7 $8 $9 $10 > /dev/null & echo $!
# debug
#bin/ocrmypdf $1 $2 $3 $4 $5 $6 $7 $8 >dev/null & echo $!
#bin/watchocr $1 $2 $3 $4 $5 $6 $7 $8> /dev/null & echo $!
