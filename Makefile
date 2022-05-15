SHELL := '/bin/bash'
INC=$(wildcard _inc/*.html)
ITEMS=index javascript python
TARGETS=$(addsuffix .html,$(ITEMS))
SRC=$(addprefix _src/,$(addsuffix .m4.html,$(ITEMS)))

# Genera la web estática
all: $(TARGETS) $(CSS)

%.html: _src/%.m4.html $(INC)
	# Construyendo $@
	@#cat _inc/header.html _src/$@ _inc/footer.html > $@;

	@# Añade cabecera_logo.html
	@#cat $@ \
	#	| sed -e "/__CABECERA_LOGO__/ r _inc/cabecera_logo.html" \
	#	| sed -e "/__CABECERA_LOGO__/ d" \
	#	| sponge $@;
	
	@m4 -Q -P -I_inc $< >$@



# Comprueba errores
check:
	@for f in *.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;


clean:
	rm -f $(TARGETS)
