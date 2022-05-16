SHELL := '/bin/bash'
INC=$(wildcard inc/*.html)

# M4 files
SRC_HTML=$(wildcard *.m4.html)
TARGETS_HTML=$(addprefix ../,$(notdir $(SRC_HTML:.m4.html=.html)))

# Genera la web estática
all: $(TARGETS_HTML)

%.html: _src/$(notdir %).m4.html $(INC)
	# Construyendo $@
	@m4 -Q -P -Iinc $< >$@
	
# Comprueba errores
check:
	@for f in *.html; do \
		echo "Analizado $$f"; \
		tidy -q -errors -utf8 $$f; \
		done;

clean:
	rm -f $(TARGETS_HTML)
