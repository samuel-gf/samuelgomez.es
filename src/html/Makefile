TARGET_FILES = index.html fuentes.html
TARGETS = $(addprefix ../../,$(TARGET_FILES))

all: header.htm footer.htm $(TARGETS)


../../index.html: index.htm
	cat header.htm | sed -e 's/__title/Profesor de secundaria/' > ../../$<l
	cat $< >>../../$<l
	cat footer.htm >>../../$<l

../../fuentes.html: fuentes.htm
	cat header.htm | sed -e 's/__title/Fuentes/' > ../../$<l
	cat $< >>../../$<l
	cat footer.htm >>../../$<l

clean:
	rm -f $(TARGETS)
