#!/bin/bash
diff -q prob1.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer A1 ###' || echo '### Wrong Answer ###'
rm outputs/*
