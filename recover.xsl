<!--<?xml version="1.0" encoding="ISO-8859-1"?>-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="html"/> 
 
  <xsl:template match="/">
    <html><body>
       <xsl:apply-templates/>
    </body></html>
  </xsl:template>

  <xsl:template match="/ehr/form/name">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> </div>
  </xsl:template>

  <xsl:template match="/ehr/form/sur_name">
    <div style="float:left;width:70%;"><xsl:apply-templates/> </div>
  </xsl:template>

  <xsl:template match="/ehr/form/s_age">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> </div>
  </xsl:template>

  <xsl:template match="/ehr/form/gen_der">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> </div>
  </xsl:template>

  <xsl:template match="/ehr/form/add_ress">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> </div>
  </xsl:template>

  <xsl:template match="/ehr/form/doc_tor">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>


  <xsl:template match="/ehr/form/da_te">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/sum_mary">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/diag_nose">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/invest_gt">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/rep_ort">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/ad_vice">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  
  <xsl:template match="/ehr/form/follow_up">
    <div style="float:left;width:70%;"> <xsl:apply-templates/> 
  </xsl:template>
  
  

</xsl:stylesheet>