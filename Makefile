SHELL := '/bin/bash'
INC=$(wildcard _inc/*.html)

# M4 files
SRC_HTML=$(wildcard _src/*.html)
SRC_CSS=$(wildcard _src/*.css)

# Targets
TARGETS_HTML=$(notdir $(SRC_HTML:.m4.html=.html))
TARGETS_CSS=$(addprefix css/,$(notdir $(SRC_CSS:.m4.css=.css)))


# Genera la web estática
all: $(TARGETS_HTML) $(TARGETS_CSS)

%.html: _src/%.m4.html $(INC)
	# Construyendo $@
	@m4 -Q -P -I_inc $< >$@
	@#cat _inc/header.html _src/$@ _inc/footer.html > $@;

	@# Añade cabecera_logo.html
	@#cat $@ \
	#	| sed -e "/__CABECERA_LOGO__/ r _inc/cabecera_logo.html" \
	#	| sed -e "/__CABECERA_LOGO__/ d" \
	#	| sponge $@;
	

css/%.css: _src/%.m4.css
	# Construyendo $@
	@m4 -Q -P _src/lib.m4 $< >$@

# Comprueba errores
check:
	@for f in *.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;


clean:
	rm -f $(TARGETS_HTML) $(TARGETS_CSS)
