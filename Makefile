SHELL := '/bin/bash'
TMPL=_tmpl/header.html _tmpl/footer.html _tmpl/cabecera_logo.html
TARGETS=index.html javascript.html python.html


# Genera la web estática
all: $(TARGETS)

%.html: _src/%.html $(TMPL)
	# Construyendo $@
	@cat _tmpl/header.html _src/$@ _tmpl/footer.html > $@;

	@# Añade cabecera_logo.html
	@cat $@ \
		| sed -e "/__CABECERA_LOGO__/ r _tmpl/cabecera_logo.html" \
		| sed -e "/__CABECERA_LOGO__/ d" \
		| sponge $@;


# Comprueba errores
check:
	@for f in *.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;


clean:
	rm -f $(TARGETS)
