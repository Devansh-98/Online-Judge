#!/bin/bash
diff -q prob2.txt outputs/output.txt 1>/dev/null && echo '### Correct Answer  ##C3#' || echo '### Wrong Answer ###'
rm outputs/*
