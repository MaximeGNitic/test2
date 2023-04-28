import axios from 'axios';
import type {OffresEmploiInterface} from 'src/interface/OffresEmploi.interface';

const url = 'http://localhost:8000/api/';

export async function fetchOffresEmploi(): Promise<OffresEmploiInterface | null>{
    const response = await axios.get(url + 'getOffresEmploi');
    return response.data;
}

export async function fetchOffreEmploi(): Promise<OffresEmploiInterface | null>{
    const response = await axios.get(url + 'getOffreEmploi/1');
    return response.data;
}