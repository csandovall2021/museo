#!/bin/bash

# Script para listar todas las imágenes en la carpeta assets/images
# Cuenta cada imagen y muestra el total de archivos

IMAGE_DIR="$(dirname "$0")"

echo "=== Listado de Imágenes ==="
echo "Directorio: $IMAGE_DIR"
echo ""

# Contador de imágenes
count=0

# Extensiones de imagen comunes
extensions=("jpg" "jpeg" "png" "gif" "bmp" "svg" "webp" "ico")

# Recorrer cada extensión y listar los archivos
for ext in "${extensions[@]}"; do
    for file in "$IMAGE_DIR"/*."$ext" "$IMAGE_DIR"/*."${ext^^}"; do
        if [ -f "$file" ]; then
            filename=$(basename "$file")
            echo "- $filename"
            ((count++))
        fi
    done
done

echo ""
echo "=== Resumen ==="
echo "Total de archivos de imagen: $count"
