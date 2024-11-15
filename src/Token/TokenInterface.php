<?php
/**
 * -- PHP Htaccess Parser --
 * TokenInterface.php created at 02-12-2014
 *
 * Copyright 2014-2024 Estevão Soares dos Santos
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/

namespace Tivie\HtaccessParser\Token;

const TOKEN_DIRECTIVE = 0;
const TOKEN_BLOCK = 1;
const TOKEN_COMMENT = 2;
const TOKEN_WHITELINE = 3;

use JsonSerializable;

/**
 * Interface TokenInterface
 * An Interface for Tokens to implement
 *
 * @package Tivie\HtaccessParser\Token
 * @copyright 2014-2024 Estêvão Soares dos Santos
 */
interface TokenInterface extends JsonSerializable
{
    /**
     * Get the Token's type
     *
     * @return int
     */
    public function getTokenType(): int;

    /**
     * Get the Token's name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the Token's arguments
     *
     * @return array
     */
    public function getArguments(): array;

    /**
     * Set the Token's arguments
     *
     * @param array $arguments
     * @return $this
     */
    public function setArguments(array $arguments): static;

    /**
     * A helper method that returns a string corresponding to the Token's value
     * (or its arguments concatenated)
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Check if this Token spawns across multiple lines
     *
     * @return bool
     */
    public function isMultiLine(): bool;

    /**
     * Get the line breaks
     *
     * @return int[]
     */
    public function getLineBreaks(): array;

    /**
     * Set the line breaks
     *
     * @param int[] $lineBreaks Array of integers
     * @return $this
     */
    public function setLineBreaks(array $lineBreaks): static;

    /**
     * @param int $lineBreak
     * @return $this
     */
    public function addLineBreak(int $lineBreak): static;

    /**
     * Get a string representation of the Token
     *
     * @return string
     */
    public function __toString(): string;

    /**
     * Get the array representation of the Token
     *
     * @return array
     */
    public function toArray(): array;
}
