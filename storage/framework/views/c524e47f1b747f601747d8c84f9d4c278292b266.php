<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="ui small three steps">
        <div class="step" id="step1">
            <i class="address card icon"></i>
            <div class="content">
                <div class="title">Dados pessoais</div>
            </div>
        </div>
        <div class="disabled step" id="step2">
            <i class="id badge icon"></i>
            <div class="content">
                <div class="title">Contactos</div>
            </div>
        </div>
        <div class="disabled step" id="step3">
            <i class="book icon"></i>
            <div class="content">
                <div class="title">Educação prévia</div>
            </div>
        </div>
    </div>

    <h4 class="ui horizontal divider header"></h4>

    <div>

        <form method="POST" action="<?php echo e(route('estudante.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="ui form" id="personalData">
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="name">Nomes próprios | Given names</label>
                            <input type="text" name="name" value="<?php echo e(old('name', '')); ?>"
                                placeholder="Nomes próprios | Given names">
                            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="required field">
                            <label for="last_name">Apelidos | Family names</label>
                            <input type="text" value="<?php echo e(old('last_name', '')); ?>" name="last_name"
                                placeholder="Apelidos | Family names">
                            <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="two fields">
                        <div class="required field">
                            <label for="bi">Bilhete de identidade | Personal identification number</label>
                            <input type="text" name="nr_bi"
                                placeholder="Bilhete de identidade | Personal identification number"
                                value="<?php echo e(old('nr_bi', '')); ?>" autocomplete="off">
                            <?php if ($errors->has('nr_bi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nr_bi'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="required field">
                            <label for="nacionalidade">Nacionalidade | Nationality</label>

                            <select name="nacionalidade" class="ui dropdown">
                                <option value="" disabled="disabled" selected="selected">Seleccione a nacionalidade |
                                    Select
                                    a
                                    nationality</option>

                                <?php $__currentLoopData = $nationalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nationality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($nationality); ?>">
                                    <?php echo e($nationality); ?></option>

                                    <?php if(old('nacionalidade') == $nationality): ?>
                                        <option value="<?php echo e($nationality); ?>" selected>
                                            <?php echo e($nationality); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($nationality); ?>">
                                            <?php echo e($nationality); ?></option>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if ($errors->has('nacionalidade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nacionalidade'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                </div>
                <div class="required three fields">
                    <div class="field">
                        <label for="local_emissao_bi">Local de emissão | Place of issue</label>
                        <input type="text" value="<?php echo e(old('local_emissao_bi', '')); ?>" name="local_emissao_bi"
                            placeholder="Local de emissão | Place of issue" autocomplete="off">
                        <?php if ($errors->has('local_emissao_bi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('local_emissao_bi'); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>


                    <div class="required field">
                        <label for="data_emissao_bi">Data de emissão | Issue date</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" value="<?php echo e(old('data_emissao_bi')); ?>" name="data_emissao_bi"
                                    placeholder="Data de emissão | Issue date" autocomplete="off">
                            </div>
                            <?php if ($errors->has('data_emissao_bi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('data_emissao_bi'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="required field">
                        <label for="data_validade_bi">Data de validade | Expiry date</label>
                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" value="<?php echo e(old('data_validade_bi', '')); ?>" name="data_validade_bi"
                                    placeholder="Data de validade | Expiry date" autocomplete="off">
                            </div>
                            <?php if ($errors->has('data_validade_bi')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('data_validade_bi'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                </div>

                <div class="three fields">
                    <div class="required field">
                        <label for="data_nascimento">Data de nascimento | Date of birth</label>

                        <div class="ui calendar">
                            <div class="ui input left icon">
                                <i class="calendar alternate outline icon"></i>
                                <input type="date" id="date_picker" value="<?php echo e(old('data_nascimento')); ?>"
                                    name="data_nascimento" placeholder="Data de nascimento | Date of birth"
                                    autocomplete="off">
                            </div>
                            <?php if ($errors->has('data_nascimento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('data_nascimento'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>
                    <div class="field">
                        <label for="naturalidade">Naturalidade | Country of of birth</label>
                        <input type="text" name="naturalidade" value="<?php echo e(old('naturalidade')); ?>"
                            placeholder="Naturalidade | Country of of birth">
                        <?php if ($errors->has('naturalidade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('naturalidade'); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                    <div class="required field">
                        <label for="sexo">Sexo</label>
                        <div class="ui form">
                            <div class="inline fields">

                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="feminino" id="feminino" name="sexo"
                                            checked="checked">
                                        <label for="feminino">Feminino</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="masculino" id="masculino" name="sexo">
                                        <label for="masculino">Masculino</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui radio checkbox">
                                        <input type="radio" value="outro" id="outro" name="sexo">
                                        <label for="outro">Outro</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($errors->has('sexo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sexo'); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

                <div class="two fields">

                    <div class="required field">
                        <label for="estado_civil">Estado civil | Marital status</label>

                        <select class="ui dropdown" name="estado_civil">
                            <option value="" disabled="disabled" selected="selected">Estado civil | Marital status
                            </option>
                            <option value="solteiro" data-calc-value="solteiro / not married">
                                solteiro / not married </option>
                            <option value="casado" data-calc-value="casado, união marital / married, marital union">
                                casado, união marital / married, marital union </option>
                            <option value="divorciado" data-calc-value="divorciado, separado / divorced, separated">
                                divorciado, separado / divorced, separated </option>
                        </select>
                        <?php if ($errors->has('estado_civil')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('estado_civil'); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                    <div class="required field">
                        <label for="ocupacao">Ocupação | Occupation</label>
                        <input type="text" name="ocupacao" placeholder="Ocupação | Occupation"
                            value="<?php echo e(old('ocupacao')); ?>" autocomplete="off">
                        <?php if ($errors->has('ocupacao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ocupacao'); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>

                </div>

                <div class="one ui buttons float-right field">
                    <button type="button" class="ui right labeled green icon button next1">Próximo<i
                            class="chevron right icon"></i></button>
                </div>
            </div>
            <!--End first form-->

            <!-- Second tab -->
            <div id="contacts">
                <div class="ui form">
                    <div class="field">
                        <div class="two fields">
                            <div class="required field">
                                <label for="email">Endereço electrónico de correio | E-mail</label>
                                <input type="email" name="email" value="<?php echo e(old('email')); ?>"
                                    placeholder="Endereço electrónico de correio | E-mail">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="required field">
                                <label for="telefone_principal">Número de telemóvel | Cellphone</label>
                                <input type="tel" name="telefone_principal" value="<?php echo e(old('telefone_principal')); ?>"
                                    placeholder="Número de telemóvel | Cellphone">
                                <?php if ($errors->has('telefone_principal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telefone_principal'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <label for="telefone_alternativo">Telefone alternativo | Alternative phone</label>
                                <input type="tel" name="telefone_alternativo" value="<?php echo e(old('telefone_alternativo')); ?>"
                                    placeholder="Telefone aternative phone" autocomplete="off">
                                <?php if ($errors->has('telefone_alternativo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telefone_alternativo'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="field">
                                <label for="morada">Morada | Address</label>
                                <input type="text" name="morada" value="<?php echo e(old('morada')); ?>"
                                    placeholder="Morada | Address" autocomplete="off">
                                <?php if ($errors->has('morada')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('morada'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="three fields">
                        <div class="required field">
                            <label for="morada_localidade">Localidade | Place</label>
                            <input type="text" value="<?php echo e(old('morada_localidade')); ?>" name="morada_localidade"
                                placeholder="Localidade | Place" autocomplete="off">
                            <?php if ($errors->has('morada_localidade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('morada_localidade'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="required field">
                            <label for="morada_pais">Pais | Country</label>

                            <select name="morada_pais" class="ui dropdown">
                                <option disabled="disabled" selected="selected">Seleccione o país | Select
                                    country
                                </option>
                                <?php $__currentLoopData = $bigArrayCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php if(old('morada_pais') == $countries->nome): ?>
                                    <option value="<?php echo e($countries->nome); ?>" selected>
                                        <?php echo e($countries->nome); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($countries->nome); ?>">
                                        <?php echo e($countries->nome); ?></option>
                                    <?php endif; ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if ($errors->has('morada_pais')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('morada_pais'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        <div class="field">
                            <label for="codigo_postal">Código postal | Postal code</label>
                            <input type="text" name="codigo_postal" placeholder="Código postal | Postal code"
                                value="<?php echo e(old('codigo_postal')); ?>" autocomplete="off">
                            <?php if ($errors->has('codigo_postal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('codigo_postal'); ?>
                            <p class="text-danger">
                                <?php echo e($message); ?>

                            </p>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    <div class="float-right field">
                        <button class="ui left labeled yellow icon button prev1"><i
                                class="chevron left icon"></i>Anterior</button>
                        <button class="ui right labeled green icon button next2">Próximo<i
                                class="chevron right icon"></i></button>
                    </div>
                </div>
            </div>
            <!--End second form-->

            <!-- Three Tab -->
            <div id="educationData">
                <div class="ui form">
                    <div class="field">
                        <div class="three fields">

                            <div class="required field">
                                <label for="qualificacao_previa">Qualificação prévia | Previous educational
                                    qualification</label>
                                <input type="text" name="qualificacao_previa" value="<?php echo e(old('qualificacao_previa')); ?>"
                                    placeholder="12ª classe, licenciatura, ou outra | secondary school or other"
                                    autocomplete="off">
                                <?php if ($errors->has('qualificacao_previa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('qualificacao_previa'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                            <div class="required field">
                                <label for="instituicao_ensino_medio">Instituição de educação | Educational
                                    institution</label>
                                <input type="text" name="instituicao_ensino_medio"
                                    value="<?php echo e(old('instituicao_ensino_medio')); ?>"
                                    placeholder="nome completo da escola, colegio ou outra | school or other institution name"
                                    autocomplete="off">
                                <?php if ($errors->has('instituicao_ensino_medio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('instituicao_ensino_medio'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                            <div class="required field">
                                <label for="curso">Curso</label>
                                <select name="curso_id" id="curso_id" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o curso | Select
                                        course
                                    </option>
                                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($curso->id); ?>">
                                        <?php echo e($curso->nome); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if ($errors->has('curso_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curso_id'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="required field">
                                <label for="data_conclusao">Data de conclusão | Graduation date</label>

                                <div class="ui calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar alternate outline icon"></i>
                                        <input type="date" id="select_date" name="data_conclusao"
                                            value="<?php echo e(old('data_conclusao')); ?>"
                                            placeholder="Data de conclusão | Graduation date" autocomplete="off">
                                    </div>
                                    <?php if ($errors->has('data_conclusao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('data_conclusao'); ?>
                                    <p class="text-danger">
                                        <?php echo e($message); ?>

                                    </p>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="required field">
                                <label for="localidade_morada_educacao">Localidade | Place</label>
                                <input type="text" name="localidade_morada_educacao"
                                    value="<?php echo e(old('localidade_morada_educacao')); ?>"
                                    placeholder="Lugar e localidade mais próxima / place" autocomplete="off">
                                <?php if ($errors->has('localidade_morada_educacao')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('localidade_morada_educacao'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="required field">
                                <label for="pais_estudo">País | Country</label>

                                <select name="pais_estudo" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o país |
                                        Select
                                        country
                                    </option>

                                    <?php $__currentLoopData = $bigArrayCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(old('pais_estudo') == $countries->nome): ?>
                                        <option value="<?php echo e($countries->nome); ?>" selected>
                                            <?php echo e($countries->nome); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($countries->nome); ?>">
                                            <?php echo e($countries->nome); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if ($errors->has('pais_estudo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pais_estudo'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="required field">
                                <label for="grau_id">Grau adacemico a frequentar</label>

                                <select name="grau_id" id="grau_id" class="ui dropdown">
                                    <option value="" disabled="disabled" selected="selected">Seleccione o grau académico
                                    </option>
                                </select>
                                <?php if ($errors->has('grau_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grau_id'); ?>
                                <p class="text-danger">
                                    <?php echo e($message); ?>

                                </p>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <div class="field">
                                <label for="">&nbsp;</label>
                                <div class="float-right field" style="margin-bottom: 1%;">
                                    <button class="ui left labeled yellow icon button prev2"><i
                                            class="chevron left icon"></i>Anterior</button>
                                    <button class="ui right labeled green icon button submit"><i class="save icon"></i>
                                        Registar
                                        estudante</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h4 class="ui horizontal divider header"></h4>
                </div>

            </div>
    </div>
    </form>
</div>

</div>


<script>
    $(document).ready(function(){
        $('#curso_id').change(function(){
            if($(this).val() != ''){

                var value = $(this).val();
                console.log(value);

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "<?php echo e(route('graus.fetch')); ?> ",
                    method: "POST",
                    data: {
                         value: value
                    },
                    success: function(result){
                    $('#grau_id').html(result);
                }, error: function(result){
                    console.log(result)
                }
            })
        }
        })
    })

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/euclidio/Dev/apps/sisgesprop/resources/views/estudantes/create.blade.php ENDPATH**/ ?>