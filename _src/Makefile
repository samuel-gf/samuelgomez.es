SHELL := '/bin/bash'
INC=$(wildcard inc/*.html)

# M4 files
SRC_HTML=$(wildcard *.html)
#SRC_CSS=$(wildcard *.css)

# Targets
TARGETS_HTML=$(addprefix ../,$(notdir $(SRC_HTML:.m4.html=.html)))
#TARGETS_CSS=$(addprefix ../css/,$(notdir $(SRC_CSS:.m4.css=.css)))


# Genera la web estática
all: $(TARGETS_HTML)

%.html: _src/$(notdir %).m4.html $(INC)
	# Construyendo $@
	@m4 -Q -P -Iinc $< >$@
	@#cat _src/inc/header.html _src/$@ _src/inc/footer.html > $@;

	@# Añade cabecera_logo.html
	@#cat $@ \
	#	| sed -e "/__CABECERA_LOGO__/ r _src/inc/cabecera_logo.html" \
	#	| sed -e "/__CABECERA_LOGO__/ d" \
	#	| sponge $@;
	

#../css/%.css: %.m4.css
	# Construyendo $@
#	@m4 -Q -P lib.m4 $< >$@

# Comprueba errores
check:
	@for f in *.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;


clean:
	rm -f $(TARGETS_HTML)
