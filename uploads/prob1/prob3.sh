#!/bin/bash
diff -q prob3.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer  ###' || echo '### Wrong Answer ###'
rm outputs/*
