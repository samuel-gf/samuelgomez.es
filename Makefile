check:
	@echo "Comprobando errores en index.html"
	@echo "---------------------------------"
	@echo
	@tidy -q -errors -utf8 index.html
