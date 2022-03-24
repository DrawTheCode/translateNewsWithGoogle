<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/environment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instructs the speech synthesizer on how to generate the output audio content.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.TextToSpeechSettings</code>
 */
class TextToSpeechSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Indicates whether text to speech is enabled. Even when this field is false,
     * other settings in this proto are still retained.
     *
     * Generated from protobuf field <code>bool enable_text_to_speech = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_text_to_speech = false;
    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioEncoding output_audio_encoding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $output_audio_encoding = 0;
    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not provided, then
     * the synthesizer will use the default sample rate based on the audio
     * encoding. If this is different from the voice's natural sample rate, then
     * the synthesizer will honor this request by converting to the desired sample
     * rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * Optional. Configuration of how speech should be synthesized, mapping from language
     * (https://cloud.google.com/dialogflow/docs/reference/language) to
     * SynthesizeSpeechConfig.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dialogflow.v2.SynthesizeSpeechConfig> synthesize_speech_configs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $synthesize_speech_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_text_to_speech
     *           Optional. Indicates whether text to speech is enabled. Even when this field is false,
     *           other settings in this proto are still retained.
     *     @type int $output_audio_encoding
     *           Required. Audio encoding of the synthesized audio content.
     *     @type int $sample_rate_hertz
     *           Optional. The synthesis sample rate (in hertz) for this audio. If not provided, then
     *           the synthesizer will use the default sample rate based on the audio
     *           encoding. If this is different from the voice's natural sample rate, then
     *           the synthesizer will honor this request by converting to the desired sample
     *           rate (which might result in worse audio quality).
     *     @type array|\Google\Protobuf\Internal\MapField $synthesize_speech_configs
     *           Optional. Configuration of how speech should be synthesized, mapping from language
     *           (https://cloud.google.com/dialogflow/docs/reference/language) to
     *           SynthesizeSpeechConfig.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Indicates whether text to speech is enabled. Even when this field is false,
     * other settings in this proto are still retained.
     *
     * Generated from protobuf field <code>bool enable_text_to_speech = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableTextToSpeech()
    {
        return $this->enable_text_to_speech;
    }

    /**
     * Optional. Indicates whether text to speech is enabled. Even when this field is false,
     * other settings in this proto are still retained.
     *
     * Generated from protobuf field <code>bool enable_text_to_speech = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableTextToSpeech($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_text_to_speech = $var;

        return $this;
    }

    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioEncoding output_audio_encoding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getOutputAudioEncoding()
    {
        return $this->output_audio_encoding;
    }

    /**
     * Required. Audio encoding of the synthesized audio content.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioEncoding output_audio_encoding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setOutputAudioEncoding($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\OutputAudioEncoding::class);
        $this->output_audio_encoding = $var;

        return $this;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not provided, then
     * the synthesizer will use the default sample rate based on the audio
     * encoding. If this is different from the voice's natural sample rate, then
     * the synthesizer will honor this request by converting to the desired sample
     * rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * Optional. The synthesis sample rate (in hertz) for this audio. If not provided, then
     * the synthesizer will use the default sample rate based on the audio
     * encoding. If this is different from the voice's natural sample rate, then
     * the synthesizer will honor this request by converting to the desired sample
     * rate (which might result in worse audio quality).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * Optional. Configuration of how speech should be synthesized, mapping from language
     * (https://cloud.google.com/dialogflow/docs/reference/language) to
     * SynthesizeSpeechConfig.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dialogflow.v2.SynthesizeSpeechConfig> synthesize_speech_configs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSynthesizeSpeechConfigs()
    {
        return $this->synthesize_speech_configs;
    }

    /**
     * Optional. Configuration of how speech should be synthesized, mapping from language
     * (https://cloud.google.com/dialogflow/docs/reference/language) to
     * SynthesizeSpeechConfig.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.dialogflow.v2.SynthesizeSpeechConfig> synthesize_speech_configs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSynthesizeSpeechConfigs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\SynthesizeSpeechConfig::class);
        $this->synthesize_speech_configs = $arr;

        return $this;
    }

}

