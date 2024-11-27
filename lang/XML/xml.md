# XML
```
Base on Web Application Programming material
```
## 목차
- [15.1 Introduction](#151-introduction)
- [15.2 XML Basics](#152-xml-basics)
- [15.3 Structuring Data](#153-structuring-data)
- [15.4 XML Namespaces](#154-XML-namespaces)
- [15.5 Document Type Definitions (DTDs)](#155-Document-Type-Definitions-DTDs)
- [15.6 W3C XML Schema Documents](#156-w3c-xml-schema-documents)
- [15.7 XML Vocabularies](#157-xml-vocabularies)
- [15.8 Extensible Stylesheet Language and XSL Transformations](#158-extensible-stylesheet-language-and-xsl-transformations)
- [15.9 Document Object Model (DOM)](#159-document-object-model-dom)
- [15.10 Web Resources](#1510-web-resources)

## 15.1 Introduction
- XML은 *데이터 저장 및 교환*에 있어서는 간편하며, 광범위하게 지원하고 개방적이다.

## 15.2 XML Basics
- XML은
  - 어떤 타입의 정보도 거의 [마크업](https://ko.wikipedia.org/wiki/%EB%A7%88%ED%81%AC%EC%97%85_%EC%96%B8%EC%96%B4)으로 만들어낼 수 있음 [^markup]
      - 수학 공식, 화학 분자 구조 등 구체적인 데이터 타입을 마크업이라는 것으로 생성하는 것이 가능함
  - **사람이 이해할 수** 있고 **컴퓨터가 처리할 수** 있는 방식으로 데이터를 설명함
  - XML parser는 XML 문서 요소를 식별하는 역할을 하며, XML식 조작을 위한 데이터 구조로 저장함
  - 문서를 적절한 구조로 표시할 수 있는 개념들이 존재함 (DTD[^DTD], 스키마, ..)
```XML
<?xml version = "1.0"?>
<player>
  <firstName>Con</firstName>
  <lastName>Panna</lastName>
  <battingAverage>0.375</battingAverage>
</player>
```
- 💡 DTDs and schemas
```text
B2B와 업무 중심 시스템에서 필수적임.
XML 문서 도입 -> 분리된 시스템을 표준화된 방식으로 조작 가능하며, 사라진/잘못 생성된 데이터로 인한 에러를 방지함
```

## 15.3 Structuring Data
## 15.4 XML Namespaces
## 15.5 Document Type Definitions (DTDs)
## 15.6 W3C XML Schema Documents
## 15.7 XML Vocabularies
### 15.7.1 MathML<sup>TM</sup>
### 15.7.2 Other Markup Languages
## 15.8 Extensible Stylesheet Language and XSL Transformations
## 15.9 Document Object Model (DOM)
## 15.10 Web Resources

[^markup]: 태그 등을 이용하여 문서나 데이터의 구조를 명기하는 언어의 한 가지
[^DTD]: Document Type Definition의 약어로, XML 문서의 구조 및 해당 문서에서 사용할 수 있는 적법한 요소와 속성을 정의한 것
