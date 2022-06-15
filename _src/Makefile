SHELL := '/bin/bash'
INC=$(wildcard inc/*.html)
SRC=$(wildcard *.php)
TARGETS=$(addprefix ../,$(notdir $(SRC:.php=.html)))
URL_BASE=https://samuelgomez.es/


# Genera la web estática
all: $(TARGETS) sitemap

# Construye los .html que son target
%.html: _src/$(notdir %).php $(INC)
	# Construyendo $@
	@php $< >$@
	
# Comprueba errores
check:
	@for f in ../*.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;

# Construye el sitemap
sitemap:
	@echo $(addprefix $(URL_BASE), $(notdir $(wildcard ../*.html))) \
		| sed 's/ /\n/g' > ../sitemap.txt

	

clean:
	rm -f $(TARGETS) ../sitemap.txt
