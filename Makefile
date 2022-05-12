SHELL := '/bin/bash'
TMPL=_tmpl/header.html _tmpl/footer.html
TARGETS=index.html javascript.html


# Genera la web estática
all: $(TARGETS)

%.html: _tmpl/%.html $(TMPL)
	# Construyendo $@
	@cat _tmpl/header.html _tmpl/$@ _tmpl/footer.html > $@; \
	TITULO=$$(grep '<h1>.*<\/h1>' -m1 -w -o $@ | sed 's/<h1>//' | sed 's/<\/h1>//'); \
	sed "s/__TITLE__/$$TITULO - Samuel Gómez/" $@ | sponge $@;




# Comprueba errores
check:
	@echo "Comprobando errores en index.html"
	@echo "---------------------------------"
	@echo
	@tidy -q -errors -utf8 index.html

clean:
	rm -f $(TARGETS)
