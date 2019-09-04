#!/bin/bash

cd /Users/anguoyue/git/duckchat-proto

sh build-php.sh

cp -r ./out/php/Zaly/* /Users/anguoyue/PhpstormProjects/gaga/src/lib/proto/Zaly/

cp -r ./out/php/GPBMetadata/* /Users/anguoyue/PhpstormProjects/gaga/src/lib/proto/GPBMetadata/
