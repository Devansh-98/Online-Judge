#!/bin/bash
diff -q prob3.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer  ### F6' || echo '### Wrong Answer ###'
rm outputs/*
