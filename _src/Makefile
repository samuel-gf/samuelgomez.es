SHELL := /bin/bash
URL_BASE = https://samuelgomez.es/

INC = $(wildcard inc/*.html)

DIR_TARGET = $(shell dirname $(shell pwd))
TARGETS = $(shell echo $(SRC) | sed -e "s/_src\///g" -e "s/.php/.html/g")

DIR_SRC = $(shell pwd)
SRC = $(shell find $(DIR_SRC) -name "*.php" -not -path "*inc/*")

#vpath %.php $(DIR_SRC)
#vpath %.php $(DIR_SRC)/matematicas/problemas

# Genera la web estática
all: $(TARGETS) sitemap

# El parámetro 0 es la profundidad del directorio
$(DIR_TARGET)/%.html: $(DIR_SRC)/%.php
	# Construyendo $@
	@php $< 0 >$@

# El parámetro 2 es la profundidad del directorio
$(DIR_TARGET)/matematicas/problemas/%.html: $(DIR_SRC)/matematicas/problemas/%.php
	# Construyendo $@
	@php $< 2 >$@



	
# Comprueba errores
check:
	@for f in ../*.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;

# Construye el sitemap
sitemap:
	@echo $(addprefix $(URL_BASE), $(shell find .. -name "*.html" -not -path "*fortran/*")) \
		| sed -e 's/\.\.\///g' -e 's/ /\n/g' > ../sitemap.txt

	

clean:
	rm -f $(TARGETS) ../sitemap.txt
