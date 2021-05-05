<?php

namespace Werxe\PhpCsFixer;

use PhpCsFixer\ConfigInterface;

class Config extends \PhpCsFixer\Config
{
    /**
     * The rules to be applied.
     *
     * @var array
     */
    protected $rules = [
        /**
         * General Standards
         */
        '@Symfony' => true,
        '@PSR1'    => true,
        '@PSR2'    => true,

        /**
         * Alias
         */
        'mb_str_functions' => false,

        /**
         * Array Notation
         */
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'trailing_comma_in_multiline' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,

        /**
         * Casing
         */
        'constant_case' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_function_type_declaration_casing' => true,

        /**
         * Cast Notation
         */
        'cast_spaces' => [
            'space' => 'single',
        ],
        'lowercase_cast' => true,
        'modernize_types_casting' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,
        'short_scalar_cast' => true,

        /**
         * Class Notation
         */
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'one',
                'method' => 'one',
                'property' => 'one',
            ],
        ],
        'no_blank_lines_after_class_opening' => true,
        'no_null_property_initialization' => true,
        'ordered_class_elements' => false,
        'ordered_interfaces' => [
            'direction' => 'ascend',
            'order' => 'alpha',
        ],
        'ordered_traits' => false,
        'protected_to_private' => false,
        'self_accessor' => false,
        'self_static_accessor' => false,
        'single_class_element_per_statement' => true,
        'single_trait_insert_per_statement' => false,
        'visibility_required' => [
            'elements' => ['property', 'const', 'method'],
        ],

        /**
         * Comment
         */
        'multiline_comment_opening_closing' => true,
        'no_empty_comment' => false,
        'no_trailing_whitespace_in_comment' => true,
        'single_line_comment_style' => [
            'comment_types' => ['hash'],
        ],

        /**
         * Control Structure
         */
        'no_alternative_syntax' => true,
        'no_superfluous_elseif' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_unneeded_control_parentheses' => [
            'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
        ],
        'no_unneeded_curly_braces' => false,
        'no_useless_else' => true,
        'simplified_if_return' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'switch_continue_to_break' => true,
        'yoda_style' => false,

        /**
         * Function Notation
         */
        'combine_nested_dirname' => false,
        'function_declaration' => [
            'closure_function_spacing' => 'one',
        ],
        'function_typehint_space' => true,
        'lambda_not_used_import' => true,
        'method_argument_space' => [
            'on_multiline' => 'ignore',
        ],
        'native_function_invocation' => false,
        'no_spaces_after_function_name' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_sprintf' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'phpdoc_to_param_type' => false,
        'phpdoc_to_return_type' => false,
        'regular_callable_call' => true,
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'single_line_throw' => true,
        'static_lambda' => true,
        'use_arrow_functions' => false,
        'void_return' => false,

        /**
         * Import
         */
        'fully_qualified_strict_types' => true,
        'global_namespace_import' => [
            'import_constants' => true,
            'import_functions' => true,
            'import_classes' => true,
        ],
        'group_import' => false,
        'no_leading_import_slash' => true,
        'no_unused_imports' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
        ],
        'single_import_per_statement' => false,
        'single_line_after_imports' => true,

        /**
         * Language Construct
         */
        'class_keyword_remove' => false,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'declare_equal_normalize' => [
            'space' => 'single',
        ],
        'dir_constant' => true,
        'error_suppression' => [
            'noise_remaining_usages' => true,
        ],
        'explicit_indirect_variable' => true,
        'function_to_constant' => false,
        'is_null' => true,
        'no_unset_on_property' => true,
        'single_space_after_construct' => [
            'constructs' => ['abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const', 'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'extends', 'final', 'finally', 'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'new', 'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'protected', 'public', 'require', 'require_once', 'return', 'static', 'throw', 'trait', 'try', 'use', 'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from'],
        ],

        /**
         * List Notation
         */
        'list_syntax' => [
            'syntax' => 'long',
        ],

        /**
         * Namespace Notation
         */
        'blank_line_after_namespace' => true,
        'clean_namespace' => true,
        'no_blank_lines_before_namespace' => false,
        'no_leading_namespace_whitespace' => true,
        'single_blank_line_before_namespace' => true,

        /**
         * Operator
         */
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => [
                '+=' => 'single_space',
            ],
        ],
        'concat_space' => [
            'spacing' => 'none',
        ],
        'increment_style' => [
            'style' => 'post',
        ],
        'logical_operators' => true,
        'new_with_braces' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => [
            'position' => 'beginning',
        ],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'unary_operator_spaces' => true,

        /**
         * PHP Tag
         */
        'blank_line_after_opening_tag' => true,
        'echo_tag_syntax' => true,
        'full_opening_tag' => true,
        'linebreak_after_opening_tag' => true,
        'no_closing_tag' => true,

        /**
         * PHPDoc
         */
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_only',
        ],
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'expectedException',
                'expectedExceptionMessage',
                'expectedExceptionMessageRegExp',
            ],
        ],
        'general_phpdoc_tag_rename' => [
            'case_sensitive' => false,
            'fix_annotation' =>  true,
            'fix_inline' =>  true,
            'replacements' => [
                'inheritDoc'  => 'inheritdoc',
                'inheritdocs' => 'inheritdoc',
                'inheritDocs' => 'inheritdoc',
            ],
        ],
        'no_empty_phpdoc' => false,
        'no_blank_lines_after_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => [
            'tags' => ['param'],
            'align' => 'vertical',
        ],
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => [
            'tags' => ['example', 'id', 'internal', 'inheritdoc', 'inheritdocs', 'link', 'source', 'toc', 'tutorial'],
        ],
        'phpdoc_line_span' => [
            'const' => 'multi',
            'property' => 'multi',
            'method' => 'multi',
        ],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => [
            'replacements' => [
                'property-read' => 'property',
                'property-write' => 'property',
                'type' => 'var',
                'link' => 'see',
            ],
        ],
        'phpdoc_no_empty_return' => false,
        'phpdoc_no_package' => false,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order_by_value' => [
            'annotations' => ['covers'],
        ],
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => [
            'replacements' => [
                'this' => '$this',
                '@this' => '$this',
                '$self' => 'self',
                '@self' => 'self',
                '$static' => 'static',
                '@static' => 'static',
            ],
        ],
        'phpdoc_scalar' => [
            'types' => ['boolean', 'double', 'integer', 'real', 'str'],
        ],
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_tag_casing' => [
            'tags' => ['inheritdoc'],
        ],
        'phpdoc_tag_type' => [
            'tags' => [
                'inheritdoc' => 'inline',
            ],
        ],
        'phpdoc_to_comment' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => [
            'groups' => ['simple', 'alias', 'meta'],
        ],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'alpha',
        ],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,

        /**
         * Return Notation
         */
        'blank_line_before_statement' => false,
        'no_useless_return' => true,
        'return_assignment' => true,
        'simplified_null_return' => false,

        /**
         * Semicolon
         */
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls',
        ],
        'no_empty_statement' => false,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => true,
        ],

        /**
         * Strict
         */
        'declare_strict_types' => true,
        'strict_comparison' => true,
        'strict_param' => true,

        /**
         * String Notation
         */
        // 'escape_implicit_backslashes' => '',
        'explicit_string_variable' => true,
        'heredoc_to_nowdoc' => true,
        'no_binary_string' => true,
        'no_trailing_whitespace_in_string' => true,
        'simple_to_complex_string_variable' => true,
        'single_quote' => true,
        'string_line_ending' => false,

        /**
         * Whitespace
         */
        'array_indentation' => false,
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'do',
                'for',
                'foreach',
                'if',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
                'while',
                'yield',
            ],
        ],
        'compact_nullable_typehint' => true,
        'heredoc_indentation' => [
            'indentation' => 'start_plus_one',
        ],
        'indentation_type' => true,
        'line_ending' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'continue',
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'use_trait',
            ],
        ],
        'no_spaces_around_offset' => [
            'positions' => ['outside'],
        ],
        'no_spaces_inside_parenthesis' => true,
        'no_trailing_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'single_blank_line_at_eof' => true,
    ];

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('werxe');

        $this->setRiskyAllowed(true);
    }

    /**
     * Get rules.
     *
     * @return array
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * Sets the given rules by appending them to the current ones.
     *
     * @param array $rules
     *
     * @return $this
     */
    public function setRules(array $rules): ConfigInterface
    {
        $this->rules = array_merge($this->rules, $rules);

        return $this;
    }

    /**
     * Sets the header comment.
     *
     * @param string $header
     *
     * @return $this
     */
    public function setHeader(string $header): ConfigInterface
    {
        $this->setRules([
            'header_comment' => [
                'header' => $header,
            ],
        ]);

        return $this;
    }

    /**
     * If PHPUnit rules are required for the project.
     *
     * @return $this
     */
    public function withPHPUnitRules(): ConfigInterface
    {
        return $this->setRules([
            'php_unit_construct' => true,
            'php_unit_dedicate_assert' => true,
            'php_unit_dedicate_assert_internal_type' => true,
            'php_unit_expectation' => ['target' => 'newest'],
            'php_unit_fqcn_annotation' => true,
            'php_unit_method_casing' => false,
            'php_unit_namespaced' => ['target' => 'newest'],
            'php_unit_no_expectation_annotation' => [
                'target' => 'newest',
                'use_class_const' => true,
            ],
            'php_unit_set_up_tear_down_visibility' => true,
            'php_unit_strict' => true,
            'php_unit_test_annotation' => ['style' => 'annotation'],
            'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
            'php_unit_test_class_requires_covers' => false,
        ]);
    }
}
