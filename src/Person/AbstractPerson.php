<?php
namespace Packaged\Rwd\Person;

abstract class AbstractPerson
{
  protected function _getPrefixWord($word)
  {
    foreach($this->_prefixes as $replacement => $regex)
    {
      if(preg_match('/^\s*(' . $regex . ')\s*$/i', $word) > 0)
      {
        return $replacement;
      }
    }
    return null;
  }

  protected function _isCompoundFragment($word)
  {
    foreach($this->_compoundFragments as $fragment)
    {
      if(strtolower($word) == strtolower($fragment))
      {
        return true;
      }
    }
    return false;
  }

  protected function _getProfessionSuffixWord($word)
  {
    return $this->_getSuffixWord($word, $this->_suffixProfession);
  }

  protected function _getNameSuffixWord($word)
  {
    return $this->_getSuffixWord($word, $this->_suffixLine);
  }

  private function _getSuffixWord($word, $p)
  {
    foreach($p as $replacement => $regex)
    {
      if(preg_match('/^\s*(' . $regex . ')\.?\s*$/i', $word) > 0)
      {
        return $replacement;
      }
    }
    return null;
  }

  protected $_prefixes = [
    'Master'      => '(master|laird)',
    'Mr.'         => '(mr.?|mister)',
    'Mrs.'        => '(mrs.?|missus|missis)',
    'Miss.'       => '(miss.?)',
    'Ms.'         => '(ms.?)',
    'Mx.'         => '(mx.?)',
    'Madam'       => '(madam|madame)',
    'Dr.'         => '(dr.?)',
    'Rev.'        => '(rev.?|rev\'d|reverend)',
    'Fr.'         => '(fr.?|father)',
    'Sr.'         => '(sr.|sr|sister)',
    'Prof.'       => '(prof.|prof|professor)',
    'Sir'         => '(sir)',
    'Hon.'        => '(hon.?|honorable)',
    'Pres.'       => '(pres.?|president)',
    'Gov'         => '(gov|governor|governer)',
    'Ofc'         => '(ofc|officer)',
    'Msgr'        => '(msgr|monsignor)',
    'Br.'         => '(br.?|brother)',
    'Supt.'       => '(supt.?|superintendent)',
    'Rep.'        => '(rep.?|representatitve)',
    'Sen.'        => '(sen.?|senator)',
    'Amb.'        => '(amb.?|ambassador)',
    'Treas.'      => '(treas.?|treasurer)',
    'Sec.'        => '(sec.?|secretary)',
    'Pvt.'        => '(pvt.?|private)',
    'Cpl.'        => '(cpl.?|corporal)',
    'Sgt.'        => '(sgt.?|sargent)',
    'Adm.'        => '(adm.?|administrative|administrator|administrater)',
    'Maj.'        => '(maj.?|major)',
    'Capt.'       => '(capt.?|captain)',
    'Cmdr.'       => '(cmdr.?|commander)',
    'Lt.'         => '(lt.?|lieutenant)',
    'Lt. Col.'    => '(lt.? ?col.?|lieutenant colonel)',
    'Col.'        => '(col.?|colonel)',
    'Gen.'        => '(gen.?|general)',
    'Bc.'         => '(bc.?|bachelor|baccalaureus)',
    'BcA.'        => '(bca.?|bachelor of arts|baccalaureus artis)',
    'ICDr.'       => '(icdr.?|doctor of canon law|juris cononici doctor)',
    'Ing.'        => '(ing.?|engineer|ingenieur)',
    'Ing. sheet.' => '(ing.? ?sheet.?|architect engineer|intrudes upon architectus)',
    'JUDr.'       => '(judr.?|juris doctor utriusque|doctor rights)',
    'MDDr.'       => '(mddr.?|doctor of dental medicine|medicinae doctor dentium)',
    'MgA.'        => '(mga.?|master of arts|magister artis)',
    'Mgr.'        => '(mgr.?|master)',
    'MD.'         => '(md.?|doctor of general medicine)',
    'DVM.'        => '(dvm.?|doctor of veterinary medicine)',
    'PaedDr.'     => '(paeddr.?|doctor of education)',
    'PharmDr.'    => '(pharmdr.?|doctor of pharmacy)',
    'PhDr.'       => '(phdr.?|doctor of philosophy)',
    'PhMr.'       => '(phmr.?|master of pharmacy)',
    'RCDr.'       => '(rcdr.?|doctor of business studies)',
    'RNDr.'       => '(rndr.?|doctor of science)',
    'DSc.'        => '(dsc.?|doctor of science)',
    'RSDr.'       => '(rsdr.?|doctor of socio-political sciences)',
    'RTDr.'       => '(rtdr.?|doctor of technical sciences)',
    'ThDr.'       => '(thdr.?|doctor of theology)',
    'Th.D.'       => '(th.?d.?|d.?th.?|d.?theol|dr.? ?theol|doctor of theology)',
    'LTh.'        => '(thlic.?|licentiate of theology)',
    'Th.M.'       => '(thmgr.?|master of theology|master of divinity)',
    'Acad.'       => '(acad.?|academian|academic)',
    'ArtD.'       => '(artd.?|doctor of arts)',
    'DiS.'        => '(dis.?|certified specialist)',
    'As.'         => '(as.?|assistant)',
    'Odb. As.'    => '(odb.? ?as.?|assistant professor)',
    'Doc.'        => '(doc.?|associate professor)',
    ''            => '(the)',
  ];

  protected $_compoundFragments = [
    'da',
    'de',
    'del',
    'della',
    'dem',
    'den',
    'der',
    'di',
    'du',
    'het',
    'la',
    'onder',
    'op',
    'pietro',
    'st.',
    'st',
    '\'t',
    'ten',
    'ter',
    'van',
    'vanden',
    'vere',
    'von',
  ];

  protected $_suffixLine = [
    'I'      => '(I)',
    'II'     => '(II)',
    'III'    => '(III)',
    'IV'     => '(IV)',
    'V'      => '(V)',
    '1st'    => '(1st)',
    '2nd'    => '(2nd)',
    '3rd'    => '(3rd)',
    '4th'    => '(4th)',
    '5th'    => '(5th)',
    'Senior' => '(Sr|Senior)',
    'Junior' => '(Jr|Junior)',
  ];

  protected $_suffixProfession = [
    'AO'             => '(ao)',
    'BA'             => '(b\.?a\.?)',
    'MSc'            => '(m\.?sc)',
    'BCompt'         => '(bcompt)',
    'PhD'            => '(ph\.?d\.?)',
    'APR'            => '(apr)',
    'RPh'            => '(rph)',
    'PE'             => '(pe)',
    'MD'             => '(m\.?d\.?)',
    'MA'             => '(ma)',
    'DMD'            => '(dmd)',
    'CME'            => '(cme)',
    'BSc'            => '(bsc)',
    'BSc(hons)'      => '(bsc\(hons\))',
    'MBA'            => '(m\.?b\.?a\.?)',
    'FAICD'          => '(faicd)',
    'CM'             => '(cm)',
    'OBC'            => '(obc)',
    'MB'             => '(m\.?b\.?)',
    'ChB'            => '(chb)',
    'FRCP'           => '(frcp)',
    'FRSC'           => '(frsc)',
    'FREng'          => '(freng)',
    'Esq'            => '(esq)',
    'MEng'           => '(meng)',
    'JD'             => '(j\.?d\.?)',
    'BGDipBus'       => '(bgdipbus)',
    'Dip'            => '(dip)',
    'Dipl.Phys'      => '(dipl\.?phys)',
    'M.H.Sc.'        => '(m\.?h\.?sc\.?)',
    'MPA'            => '(mpa)',
    'B.Comm'         => '(b\.?comm)',
    'B.Eng'          => '(b\.?eng)',
    'B.Acc'          => '(b\.?acc)',
    'FSA'            => '(fsa)',
    'PGDM'           => '(pgdm)',
    'FCPA'           => '(fcpa)',
    'RN'             => '(rn)',
    'R.N.'           => '(r\.?n\.?)',
    'MSN'            => '(msn)',
    'PCA'            => '(pca)',
    'PCCRM'          => '(pccrm)',
    'PCFP'           => '(pcfp)',
    'PCGD'           => '(pcgd)',
    'PCHR'           => '(pchr)',
    'PCM'            => '(pcm)',
    'PCPS'           => '(pcps)',
    'PCPM'           => '(pcpm)',
    'PCSCM'          => '(pcscm)',
    'PCSM'           => '(pcsm)',
    'PCMM'           => '(pcmm)',
    'PCTC'           => '(pctc)',
    'ACA'            => '(aca)',
    'FCA'            => '(fca)',
    'ACMA'           => '(acma)',
    'FCMA'           => '(fcma)',
    'AAIA'           => '(aaia)',
    'FAIA'           => '(faia)',
    'CCC'            => '(ccc)',
    'MIPA'           => '(mipa)',
    'FIPA'           => '(fipa)',
    'CIA'            => '(cia)',
    'CFE'            => '(cfe)',
    'CISA'           => '(cisa)',
    'CFAP'           => '(cfap)',
    'QC'             => '(qc)',
    'Q.C.'           => '(q\.?c\.?)',
    'M.Tech'         => '(m\.?tech)',
    'CTA'            => '(cta)',
    'C.I.M.A.'       => '(c\.?i\.?m\.?a\.?)',
    'B.Ec'           => '(b\.?ec)',
    'CFIA'           => '(cfia)',
    'ICCP'           => '(iccp)',
    'CPS'            => '(cps)',
    'CAP-OM'         => '(cap-om)',
    'CAPTA'          => '(capta)',
    'TNAOAP'         => '(tnaoap)',
    'AFA'            => '(afa)',
    'AVA'            => '(ava)',
    'ASA'            => '(asa)',
    'CAIA'           => '(caia)',
    'CBA'            => '(cba)',
    'CVA'            => '(cva)',
    'ICVS'           => '(icvs)',
    'CIIA'           => '(ciia)',
    'CMU'            => '(cmu)',
    'PFM'            => '(pfm)',
    'PRM'            => '(prm)',
    'CFP'            => '(cfp)',
    'CWM'            => '(cwm)',
    'CCP'            => '(ccp)',
    'EA'             => '(ea)',
    'CCMT'           => '(ccmt)',
    'CGAP'           => '(cgap)',
    'CDFM.'          => '(cdfm)',
    'CFO'            => '(cfo)',
    'CGFM'           => '(cgfm)',
    'CGAT'           => '(cgat)',
    'CGFO'           => '(cgfo)',
    'CMFO'           => '(cmfo)',
    'CPFO'           => '(cpfo)',
    'CPFA'           => '(cpfa)',
    'BMD'            => '(bmd)',
    'BIET'           => '(biet)',
    'P.Eng'          => '(p.eng)',
    'MBBS'           => '(mbbs)',
    'BCh'            => '(bch)',
    'BMBS'           => '(bmbs)',
    'MBBChir'        => '(mbbchir)',
    'MBChBa'         => '(mbchba)',
    'MPhil'          => '(mphil)',
    'LL.D'           => '(ll\.?d)',
    'D.Lit'          => '(d\.?lit)',
    'DEA'            => '(dea)',
    'DESS'           => '(dess)',
    'DClinPsy'       => '(dclinpsy)',
    'DSc'            => '(dsc)',
    'MRes'           => '(m\.?res)',
    'Psy.D'          => '(psy\.?d)',
    'Pharm.D'        => '(pharm\.?d)',
    'BA(Admin)'      => '(ba\(admin\))',
    'BAcc'           => '(bacc)',
    'BACom'          => '(bacom)',
    'BAdmin'         => '(badmin)',
    'BAE'            => '(bae)',
    'BAEcon'         => '(baecon)',
    'BA(Ed)'         => '(ba\(ed\))',
    'BA(FS)'         => '(ba\(fs\))',
    'BAgr'           => '(bagr)',
    'BAH'            => '(bah)',
    'BAI'            => '(bai)',
    'BAI(Elect)'     => '(bai\(elect\))',
    'BAI(Mech)'      => '(bai\(mech\))',
    'BALaw'          => '(balaw)',
    'BAO'            => '(bao)',
    'BAppSc'         => '(bappsc)',
    'BArch'          => '(barch)',
    'BArchSc'        => '(barchsc)',
    'BARelSt'        => '(barelst)',
    'BASc'           => '(basc)',
    'BASoc'          => '(basoc)',
    'DDS'            => '(d\.?d\.?s\.?)',
    'BASS'           => '(bass)',
    'BATheol'        => '(batheol)',
    'BBLS'           => '(bbls)',
    'BBS'            => '(bbs)',
    'BBus'           => '(bbus)',
    'BChem'          => '(bchem)',
    'BCJ'            => '(bcj)',
    'BCL'            => '(bcl)',
    'BCLD(SocSc)'    => '(bcld\(socsc\))',
    'BClinSci'       => '(bclinsci)',
    'BCom'           => '(b\.?com)',
    'BCombSt'        => '(bcombst)',
    'BCommEdCommDev' => '(bcommedcommdev)',
    'BComp'          => '(bcomp)',
    'BComSc'         => '(bcomsc)',
    'BCoun'          => '(bcoun)',
    'BD'             => '(bd)',
    'BDes'           => '(bdes)',
    'BE'             => '(be)',
    'BEcon'          => '(becon)',
    'BEcon&Fin'      => '(becon&fin)',
    'MPPM'           => '(m\.?p\.?p\.?m\.?)',
    'BEconSci'       => '(beconsci)',
    'BEd'            => '(bed)',
    'BEng'           => '(beng)',
    'BES'            => '(bes)',
    'BEng(Tech)'     => '(beng\(tech\))',
    'BFA'            => '(bfa)',
    'BFin'           => '(bfin)',
    'BFLS'           => '(bfls)',
    'BFST'           => '(bfst)',
    'BH'             => '(bh)',
    'BHealthSc'      => '(bhealthsc)',
    'BHSc'           => '(bhsc)',
    'BHy'            => '(bhy)',
    'BJur'           => '(bjur)',
    'BL'             => '(bl)',
    'BLE'            => '(ble)',
    'BLegSc'         => '(blegsc)',
    'BLib'           => '(blib)',
    'BLing'          => '(bling)',
    'BLitt'          => '(blitt)',
    'BLittCelt'      => '(blittcelt)',
    'BLS'            => '(bls)',
    'BMedSc'         => '(bmedsc)',
    'BMet'           => '(bmet)',
    'BMid'           => '(bmid)',
    'BMin'           => '(bmin)',
    'BMS'            => '(bms)',
    'BMSc'           => '(bmsc)',
    'BMus'           => '(bmus)',
    'BMusEd'         => '(bmused)',
    'BMusPerf'       => '(bmusperf)',
    'BN'             => '(bn)',
    'BNS'            => '(bns)',
    'BNurs'          => '(bnurs)',
    'BOptom'         => '(boptom)',
    'BPA'            => '(bpa)',
    'BPharm'         => '(bpharm)',
    'BPhil'          => '(bphil)',
    'TTC'            => '(ttc)',
    'DIP'            => '(dip)',
    'Tchg'           => '(tchg)',
    'MEd'            => '(med)',
    'ACIB'           => '(acib)',
    'FCIM'           => '(fcim)',
    'FCIS'           => '(fcis)',
    'FCS'            => '(fcs)',
    'Fcs'            => '(fcs)',
    'Bachelor'       => '(bachelor)',
    'O.C.'           => '(o\.?c\.?)',
    'JP'             => '(jp)',
    'C.Eng'          => '(c\.?eng)',
    'C.P.A.'         => '(c\.?p\.?a\.?)',
    'B.B.S.'         => '(b\.?b\.?s\.?)',
    'MBE'            => '(mbe)',
    'GBE'            => '(gbe)',
    'KBE'            => '(kbe)',
    'DBE'            => '(dbe)',
    'CBE'            => '(cbe)',
    'OBE'            => '(obe)',
    'MRICS'          => '(mrics)',
    'D.P.S.K.'       => '(d\.?p\.?s\.?k\.?)',
    'D.P.P.J.'       => '(d\.?p\.?p\.?j\.?)',
    'DPSK'           => '(dpsk)',
    'DPPJ'           => '(dppj)',
    'B.B.A.'         => '(b\.?b\.?a\.?)',
    'GBS'            => '(gbs)',
    'MIGEM'          => '(migem|m\.i\.g\.e\.m\.)',
    'BPhil(Ed)'      => '(bphil\(ed\))',
    'BPhys'          => '(bphys)',
    'BPhysio'        => '(bphysio)',
    'BPl'            => '(bpl)',
    'BRadiog'        => '(bradiog)',
    'BBA'            => '(b\.?b\.?a\.?)',
    'B.Sc'           => '(b\.?sc)',
    'BScAgr'         => '(bscagr)',
    'BSc(Dairy)'     => '(bsc\(dairy\))',
    'BSc(DomSc)'     => '(bsc\(domsc\))',
    'BScEc'          => '(bscec)',
    'BScEcon'        => '(bscecon)',
    'BSc(Econ)'      => '(bsc\(econ\))',
    'BSc(Eng)'       => '(bsc\(eng\))',
    'BScFor'         => '(bscfor)',
    'BSc(HealthSc)'  => '(bsc\(healthsc\))',
    'BSc(Hort)'      => '(bsc\(hort\))',
    'BSc(MCRM)'      => '(bsc\(mcrm\))',
    'BSc(Med)'       => '(bsc\(med\))',
    'BSc(Mid)'       => '(bsc\(mid\))',
    'BSc(Min)'       => '(bsc\(min\))',
    'BSc(Psych)'     => '(bsc\(psych\))',
    'BSc(Tech)'      => '(bsc\(tech\))',
    'BSD'            => '(bsd)',
    'BSocSc'         => '(bsocsc)',
    'BSS'            => '(bss)',
    'BStSu'          => '(bstsu)',
    'BTchg'          => '(btchg)',
    'BTCP'           => '(btcp)',
    'BTech'          => '(btech)',
    'BTechEd'        => '(bteched)',
    'BTh'            => '(bth)',
    'BTheol'         => '(btheol)',
    'BTS'            => '(bts)',
    'EdB'            => '(edb)',
    'LittB'          => '(littb)',
    'MusB'           => '(musb)',
    'ScBTech'        => '(scbtech)',
    'CEng'           => '(ceng)',
    'CFA'            => '(c\.?f\.?a\.?)',
    'LLB'            => '(ll\.?b)',
    'LLM'            => '(ll\.?m)',
    'CA(SA)'         => '(ca\(sa\))',
    'CA'             => '(c\.?a\.?)',
    'CPA'            => '(cpa)',
    'Solicitor'      => '(solicitor)',
    'DMS'            => '(dms)',
    'FIWO'           => '(fiwo)',
    'CEnv'           => '(cenv)',
    'MICE'           => '(mice)',
    'MIWEM'          => '(miwem)',
    'BEc'            => '(bec)',
    'MEc'            => '(mec)',
    'HDip'           => '(hdip)',
    'B.Bus.'         => '(b\.?bus\.?)',
    'E.S.C.P.'       => '(e\.?s\.?c\.?p\.?)',
  ];

  protected $_vowels = ['a', 'e', 'i', 'o', 'u'];
}