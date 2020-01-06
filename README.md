# pleksdk
SDK da integração com a API da plekhub

# autenticação
$autenticacao = new \Plekhub\Pleksdk\Authentication\Basic("usuario","secret");

# Estados Civis / Listar todos os Estados Civis

$getMartial = Plekhub\Pleksdk\Plekhub::getMaritalStatusMethod($autenticacao);

$teste = $getMartial->execute();

# Estados Civis / Listar todos os Estados Civis - resposta
<pre>
array(7) { 
  [0]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#14 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(1)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(8) "Solteiro"
  }
  [1]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#15 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(2)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(6) "Casado"
  }
  [2]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#16 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(3)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(8) "Amasiado"
  }
}
</pre>
# Tipos de Pessoa/Listar todos os Tipos de Pessoa
$personType = Plekhub\Pleksdk\Plekhub::getPersonTypeMethod($autenticacao);

$teste = $personType->execute();

# Tipos de Pessoa/Listar todos os Tipos de Pessoa - resposta
<pre>
array(2) {
  [0]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#9 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(1)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(7) "Física"
  }
  [1]=>
  object(Plekhub\Pleksdk\Entities\BasicEntity)#10 (2) {
    ["id":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    int(2)
    ["name":"Plekhub\Pleksdk\Entities\BasicEntity":private]=>
    string(9) "Jurídica"
  }
}
</pre>

# Seguro Fiança com Identificador/Calcular Seguro Fiança com Identificador
<pre>
$postInsuranceGuaranteeWithIdentifierMethod = Plekhub\Pleksdk\Plekhub::postInsuranceGuaranteeWithIdentifierMethod($autenticacao);<br>
$postInsuranceGuaranteeWithIdentifierMethod->propety()<br>
        ->setAddress("Rua falsa 123")<br>
        ->setTypeId(1)<br>
        ->setReasonRentId(1)<br>
        ->setCep(74938120)<br>
        ->setRentValue(600)<br>
        ->setCondominumValue(0)<br>
        ->setElectricalValue(0)<br>
        ->setIptuValue(20)<br>
        ->setWaterValue(0)<br>
        ->setGasValue(0)<br>
        ->setStreetTypeId(1)<br>
        ->setNeighborhood("bairro")<br>
        ->setCoverageInnerPainting(0)<br>
        ->setCoverageOuterPainting(0)<br>
        ->setCoveragePropertyDamage(0)<br>
        ->setCoverageContractTerminationFine(0)<br>
        ->setReadjustmentIndexId(1)<br>
        ->setValidityDuration(30);<br>
$postInsuranceGuaranteeWithIdentifierMethod->addRenter()<br>
        ->setCpf(00000000000)<br>
        ->setName("fulano de tal")<br>
        ->setBirthday("1993-11-25")<br>
        ->setEmanciped(0)<br>
        ->setPhoneDdd(62)<br>
        ->setPhoneNumber(33333333)<br>
        ->setMaritalStatusId(1)<br>
        ->setEmail("fulano@hotmail.com")<br>
        ->setEmploymentBondId(1)<br>
        ->setResidenceCep(74030100)<br>
        ->setCellphoneDdd(62)<br>
        ->setCellphoneNumber(99999999)<br>
        ->setOtherIncomes(0)<br>
        ->setPublicPerson(0)<br>
        ->setCompanyPhoneDdd(62)<br>
        ->setCompanyPhoneNumber(333333333)<br>
        ->setCompanyName("plek")<br>
        ->setResidentCountry("Brasil");<br>
$teste = $postInsuranceGuaranteeWithIdentifierMethod->execute();<br>
</pre>
# Seguro Fiança com Identificador/Calcular Seguro Fiança com Identificador - resposta
<pre>
array(1) {<br>
  ["PortoSeguro"]=><br>
  object(Plekhub\Pleksdk\Entities\BudgetsEntity)#14 (5) {<br>
    ["insuranceCompany":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=><br>
    string(11) "PortoSeguro"<br>
    ["id":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=><br>
    int(1)<br>
    ["coverage":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=><br>
    object(Plekhub\Pleksdk\Entities\CoverageEntity)#15 (6) {<br>
      ["rent":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(600)<br>
      ["condominium":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(0)<br>
      ["eletric":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(0)<br>
      ["iptu":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(0)<br>
      ["water":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(0)<br>
      ["gas":"Plekhub\Pleksdk\Entities\CoverageEntity":private]=><br>
      int(0)<br>
    }<br>
    ["prize":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=><br>
    object(Plekhub\Pleksdk\Entities\PrizeEntity)#16 (5) {<br>
      ["emergencyValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=><br>
      int(0)<br>
      ["netValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=><br>
      int(0)<br>
      ["policyCost":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=><br>
      int(0)<br>
      ["iofValue":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=><br>
      int(0)<br>
      ["total":"Plekhub\Pleksdk\Entities\PrizeEntity":private]=><br>
      int(0)<br>
    }<br>
    ["installmentPlans":"Plekhub\Pleksdk\Entities\BudgetsEntity":private]=><br>
    array(1) {<br>
      [0]=><br>
      object(Plekhub\Pleksdk\Entities\InstallmentPlansEntity)#17 (12) {<br>
        ["id":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["paymentType":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        string(6) "BOLETO"<br>
        ["description":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        string(6) "BOLETO"<br>
        ["installmentQuantity":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(1)<br>
        ["firstInstallmentValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["remainingInstallmentsValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["interestValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["chargeValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["policyValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["iofValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["interestTax":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
        ["totalValue":"Plekhub\Pleksdk\Entities\InstallmentPlansEntity":private]=><br>
        int(0)<br>
      }<br>
    }<br>
  }<br>
}<br>
</pre>
# Contratar/Realizar Contratação
<pre>
$postContractMethod = Plekhub\Pleksdk\Plekhub::postContractMethod($autenticacao);<br>
$postContractMethod->setBudget(1);<br>
$postContractMethod->setChoosenPlan(0);<br>
$postContractMethod->setInsuranceCompany("PortoSeguro");<br>

$postContractMethod->landLord()<br>
        ->setAddress("rua falsa 123")<br>
        ->setAddressComplement("")<br>
        ->setAddressNumber(1)<br>
        ->setBirthday("1993-11-25")<br>
        ->setCep(74000000)<br>
        ->setCity("Goiania")<br>
        ->setCpf("00000000000")<br>
        ->setEmail("cleomar@plek.com.br")<br>
        ->setName("fulano de tal")<br>
        ->setNeighborhood("bairro")<br>
        ->setPersonTypeId(1)<br>
        ->setPhone(62333633333)<br>
        ->setProfession(1)<br>
        ->setPublicPerson(0)<br>
        ->setResidentCountry("Brasil")<br>
        ->setStreetTypeId(1);<br>
$teste = $postContractMethod->execute();<br>
</pre>
# Contratar/Realizar Contratação - resposta
bool(true)


# exceções

Plekhub\Pleksdk\Exceptions\ValidationException -> falha da validação da entidade enviada<br>
Plekhub\Pleksdk\Exceptions\AuthenticationException -> falha na autenticação<br>
Plekhub\Pleksdk\Exceptions\RequisitionException -> falha no servidor<br>

