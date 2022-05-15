LATEXC = pdflatex
FILES_TEX = $(shell find . -maxdepth 1 -name '*.tex' ! -iname 'tmp.tex')
FILES_PDF = $(addprefix ../pdf/,$(FILES_TEX:.tex=.pdf))

all: $(FILES_PDF) clean_aux

../pdf/%.pdf: %.tex tmpl/* bib/*
	# Versión A4
	$(LATEXC) $<
	biber $(basename $<)
	$(LATEXC) $<
	$(LATEXC) $<
	mv $(basename $<).pdf ../../pdf
	
# Versión A5
#cat tmpl/header_general1.tex tmpl/header_a5.tex tmpl/header_general2.tex $< tmpl/foot.tex > tmp.tex
#$(LATEXCC) tmp.tex
#mv tmp.pdf $(@:.pdf=_a5.pdf)

clean_aux:
	@rm -f *.aux *.log *.out 
	@rm -f *.bib *.idx *.ilg *.ind *.xml *.toc *.bbl *.blg *.bcf
	@rm -f tmpl/*.aux

mv_to_dest:
	mv *.pdf ../pdf	

clean: clean_aux

