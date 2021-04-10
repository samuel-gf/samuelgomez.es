TARGET = index

all:
	asciidoctor $(TARGET).adoc -a icons -a stylesheet=css/general.css  -o $(TARGET).html
	asciidoctor-pdf $(TARGET).adoc -a icons -a stylesheet=css/general.css  -o fortran.pdf
	cp fortran.pdf ../../../pdf

clean:
	rm -f $(TARGET).html
