#!/bin/bash
diff -q prob5.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer  ### Y25' || echo '### Wrong Answer ###'
rm outputs/*
