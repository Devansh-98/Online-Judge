#!/bin/bash
diff -q prob4.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer  ### J10' || echo '### Wrong Answer ###'
rm outputs/*
